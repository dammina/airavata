/**
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
package org.apache.airavata.model.dbevent;

import org.apache.thrift.scheme.IScheme;
import org.apache.thrift.scheme.SchemeFactory;
import org.apache.thrift.scheme.StandardScheme;

import org.apache.thrift.scheme.TupleScheme;
import org.apache.thrift.protocol.TTupleProtocol;
import org.apache.thrift.protocol.TProtocolException;
import org.apache.thrift.EncodingUtils;
import org.apache.thrift.TException;
import org.apache.thrift.async.AsyncMethodCallback;
import org.apache.thrift.server.AbstractNonblockingServer.*;
import java.util.List;
import java.util.ArrayList;
import java.util.Map;
import java.util.HashMap;
import java.util.EnumMap;
import java.util.Set;
import java.util.HashSet;
import java.util.EnumSet;
import java.util.Collections;
import java.util.BitSet;
import java.nio.ByteBuffer;
import java.util.Arrays;
import javax.annotation.Generated;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

@SuppressWarnings({"cast", "rawtypes", "serial", "unchecked"})
@Generated(value = "Autogenerated by Thrift Compiler (0.9.3)")
public class DBEventMessage implements org.apache.thrift.TBase<DBEventMessage, DBEventMessage._Fields>, java.io.Serializable, Cloneable, Comparable<DBEventMessage> {
  private static final org.apache.thrift.protocol.TStruct STRUCT_DESC = new org.apache.thrift.protocol.TStruct("DBEventMessage");

  private static final org.apache.thrift.protocol.TField DB_EVENT_TYPE_FIELD_DESC = new org.apache.thrift.protocol.TField("dbEventType", org.apache.thrift.protocol.TType.I32, (short)1);
  private static final org.apache.thrift.protocol.TField MESSAGE_CONTEXT_FIELD_DESC = new org.apache.thrift.protocol.TField("messageContext", org.apache.thrift.protocol.TType.STRUCT, (short)2);
  private static final org.apache.thrift.protocol.TField PUBLISHER_SERVICE_FIELD_DESC = new org.apache.thrift.protocol.TField("publisherService", org.apache.thrift.protocol.TType.STRING, (short)3);

  private static final Map<Class<? extends IScheme>, SchemeFactory> schemes = new HashMap<Class<? extends IScheme>, SchemeFactory>();
  static {
    schemes.put(StandardScheme.class, new DBEventMessageStandardSchemeFactory());
    schemes.put(TupleScheme.class, new DBEventMessageTupleSchemeFactory());
  }

  private DBEventType dbEventType; // required
  private DBEventMessageContext messageContext; // required
  private String publisherService; // required

  /** The set of fields this struct contains, along with convenience methods for finding and manipulating them. */
  public enum _Fields implements org.apache.thrift.TFieldIdEnum {
    /**
     * 
     * @see DBEventType
     */
    DB_EVENT_TYPE((short)1, "dbEventType"),
    MESSAGE_CONTEXT((short)2, "messageContext"),
    PUBLISHER_SERVICE((short)3, "publisherService");

    private static final Map<String, _Fields> byName = new HashMap<String, _Fields>();

    static {
      for (_Fields field : EnumSet.allOf(_Fields.class)) {
        byName.put(field.getFieldName(), field);
      }
    }

    /**
     * Find the _Fields constant that matches fieldId, or null if its not found.
     */
    public static _Fields findByThriftId(int fieldId) {
      switch(fieldId) {
        case 1: // DB_EVENT_TYPE
          return DB_EVENT_TYPE;
        case 2: // MESSAGE_CONTEXT
          return MESSAGE_CONTEXT;
        case 3: // PUBLISHER_SERVICE
          return PUBLISHER_SERVICE;
        default:
          return null;
      }
    }

    /**
     * Find the _Fields constant that matches fieldId, throwing an exception
     * if it is not found.
     */
    public static _Fields findByThriftIdOrThrow(int fieldId) {
      _Fields fields = findByThriftId(fieldId);
      if (fields == null) throw new IllegalArgumentException("Field " + fieldId + " doesn't exist!");
      return fields;
    }

    /**
     * Find the _Fields constant that matches name, or null if its not found.
     */
    public static _Fields findByName(String name) {
      return byName.get(name);
    }

    private final short _thriftId;
    private final String _fieldName;

    _Fields(short thriftId, String fieldName) {
      _thriftId = thriftId;
      _fieldName = fieldName;
    }

    public short getThriftFieldId() {
      return _thriftId;
    }

    public String getFieldName() {
      return _fieldName;
    }
  }

  // isset id assignments
  public static final Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> metaDataMap;
  static {
    Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> tmpMap = new EnumMap<_Fields, org.apache.thrift.meta_data.FieldMetaData>(_Fields.class);
    tmpMap.put(_Fields.DB_EVENT_TYPE, new org.apache.thrift.meta_data.FieldMetaData("dbEventType", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.EnumMetaData(org.apache.thrift.protocol.TType.ENUM, DBEventType.class)));
    tmpMap.put(_Fields.MESSAGE_CONTEXT, new org.apache.thrift.meta_data.FieldMetaData("messageContext", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.StructMetaData(org.apache.thrift.protocol.TType.STRUCT, DBEventMessageContext.class)));
    tmpMap.put(_Fields.PUBLISHER_SERVICE, new org.apache.thrift.meta_data.FieldMetaData("publisherService", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING)));
    metaDataMap = Collections.unmodifiableMap(tmpMap);
    org.apache.thrift.meta_data.FieldMetaData.addStructMetaDataMap(DBEventMessage.class, metaDataMap);
  }

  public DBEventMessage() {
  }

  public DBEventMessage(
    DBEventType dbEventType,
    DBEventMessageContext messageContext,
    String publisherService)
  {
    this();
    this.dbEventType = dbEventType;
    this.messageContext = messageContext;
    this.publisherService = publisherService;
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public DBEventMessage(DBEventMessage other) {
    if (other.isSetDbEventType()) {
      this.dbEventType = other.dbEventType;
    }
    if (other.isSetMessageContext()) {
      this.messageContext = new DBEventMessageContext(other.messageContext);
    }
    if (other.isSetPublisherService()) {
      this.publisherService = other.publisherService;
    }
  }

  public DBEventMessage deepCopy() {
    return new DBEventMessage(this);
  }

  @Override
  public void clear() {
    this.dbEventType = null;
    this.messageContext = null;
    this.publisherService = null;
  }

  /**
   * 
   * @see DBEventType
   */
  public DBEventType getDbEventType() {
    return this.dbEventType;
  }

  /**
   * 
   * @see DBEventType
   */
  public void setDbEventType(DBEventType dbEventType) {
    this.dbEventType = dbEventType;
  }

  public void unsetDbEventType() {
    this.dbEventType = null;
  }

  /** Returns true if field dbEventType is set (has been assigned a value) and false otherwise */
  public boolean isSetDbEventType() {
    return this.dbEventType != null;
  }

  public void setDbEventTypeIsSet(boolean value) {
    if (!value) {
      this.dbEventType = null;
    }
  }

  public DBEventMessageContext getMessageContext() {
    return this.messageContext;
  }

  public void setMessageContext(DBEventMessageContext messageContext) {
    this.messageContext = messageContext;
  }

  public void unsetMessageContext() {
    this.messageContext = null;
  }

  /** Returns true if field messageContext is set (has been assigned a value) and false otherwise */
  public boolean isSetMessageContext() {
    return this.messageContext != null;
  }

  public void setMessageContextIsSet(boolean value) {
    if (!value) {
      this.messageContext = null;
    }
  }

  public String getPublisherService() {
    return this.publisherService;
  }

  public void setPublisherService(String publisherService) {
    this.publisherService = publisherService;
  }

  public void unsetPublisherService() {
    this.publisherService = null;
  }

  /** Returns true if field publisherService is set (has been assigned a value) and false otherwise */
  public boolean isSetPublisherService() {
    return this.publisherService != null;
  }

  public void setPublisherServiceIsSet(boolean value) {
    if (!value) {
      this.publisherService = null;
    }
  }

  public void setFieldValue(_Fields field, Object value) {
    switch (field) {
    case DB_EVENT_TYPE:
      if (value == null) {
        unsetDbEventType();
      } else {
        setDbEventType((DBEventType)value);
      }
      break;

    case MESSAGE_CONTEXT:
      if (value == null) {
        unsetMessageContext();
      } else {
        setMessageContext((DBEventMessageContext)value);
      }
      break;

    case PUBLISHER_SERVICE:
      if (value == null) {
        unsetPublisherService();
      } else {
        setPublisherService((String)value);
      }
      break;

    }
  }

  public Object getFieldValue(_Fields field) {
    switch (field) {
    case DB_EVENT_TYPE:
      return getDbEventType();

    case MESSAGE_CONTEXT:
      return getMessageContext();

    case PUBLISHER_SERVICE:
      return getPublisherService();

    }
    throw new IllegalStateException();
  }

  /** Returns true if field corresponding to fieldID is set (has been assigned a value) and false otherwise */
  public boolean isSet(_Fields field) {
    if (field == null) {
      throw new IllegalArgumentException();
    }

    switch (field) {
    case DB_EVENT_TYPE:
      return isSetDbEventType();
    case MESSAGE_CONTEXT:
      return isSetMessageContext();
    case PUBLISHER_SERVICE:
      return isSetPublisherService();
    }
    throw new IllegalStateException();
  }

  @Override
  public boolean equals(Object that) {
    if (that == null)
      return false;
    if (that instanceof DBEventMessage)
      return this.equals((DBEventMessage)that);
    return false;
  }

  public boolean equals(DBEventMessage that) {
    if (that == null)
      return false;

    boolean this_present_dbEventType = true && this.isSetDbEventType();
    boolean that_present_dbEventType = true && that.isSetDbEventType();
    if (this_present_dbEventType || that_present_dbEventType) {
      if (!(this_present_dbEventType && that_present_dbEventType))
        return false;
      if (!this.dbEventType.equals(that.dbEventType))
        return false;
    }

    boolean this_present_messageContext = true && this.isSetMessageContext();
    boolean that_present_messageContext = true && that.isSetMessageContext();
    if (this_present_messageContext || that_present_messageContext) {
      if (!(this_present_messageContext && that_present_messageContext))
        return false;
      if (!this.messageContext.equals(that.messageContext))
        return false;
    }

    boolean this_present_publisherService = true && this.isSetPublisherService();
    boolean that_present_publisherService = true && that.isSetPublisherService();
    if (this_present_publisherService || that_present_publisherService) {
      if (!(this_present_publisherService && that_present_publisherService))
        return false;
      if (!this.publisherService.equals(that.publisherService))
        return false;
    }

    return true;
  }

  @Override
  public int hashCode() {
    List<Object> list = new ArrayList<Object>();

    boolean present_dbEventType = true && (isSetDbEventType());
    list.add(present_dbEventType);
    if (present_dbEventType)
      list.add(dbEventType.getValue());

    boolean present_messageContext = true && (isSetMessageContext());
    list.add(present_messageContext);
    if (present_messageContext)
      list.add(messageContext);

    boolean present_publisherService = true && (isSetPublisherService());
    list.add(present_publisherService);
    if (present_publisherService)
      list.add(publisherService);

    return list.hashCode();
  }

  @Override
  public int compareTo(DBEventMessage other) {
    if (!getClass().equals(other.getClass())) {
      return getClass().getName().compareTo(other.getClass().getName());
    }

    int lastComparison = 0;

    lastComparison = Boolean.valueOf(isSetDbEventType()).compareTo(other.isSetDbEventType());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetDbEventType()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.dbEventType, other.dbEventType);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    lastComparison = Boolean.valueOf(isSetMessageContext()).compareTo(other.isSetMessageContext());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetMessageContext()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.messageContext, other.messageContext);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    lastComparison = Boolean.valueOf(isSetPublisherService()).compareTo(other.isSetPublisherService());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetPublisherService()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.publisherService, other.publisherService);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    return 0;
  }

  public _Fields fieldForId(int fieldId) {
    return _Fields.findByThriftId(fieldId);
  }

  public void read(org.apache.thrift.protocol.TProtocol iprot) throws org.apache.thrift.TException {
    schemes.get(iprot.getScheme()).getScheme().read(iprot, this);
  }

  public void write(org.apache.thrift.protocol.TProtocol oprot) throws org.apache.thrift.TException {
    schemes.get(oprot.getScheme()).getScheme().write(oprot, this);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder("DBEventMessage(");
    boolean first = true;

    sb.append("dbEventType:");
    if (this.dbEventType == null) {
      sb.append("null");
    } else {
      sb.append(this.dbEventType);
    }
    first = false;
    if (!first) sb.append(", ");
    sb.append("messageContext:");
    if (this.messageContext == null) {
      sb.append("null");
    } else {
      sb.append(this.messageContext);
    }
    first = false;
    if (!first) sb.append(", ");
    sb.append("publisherService:");
    if (this.publisherService == null) {
      sb.append("null");
    } else {
      sb.append(this.publisherService);
    }
    first = false;
    sb.append(")");
    return sb.toString();
  }

  public void validate() throws org.apache.thrift.TException {
    // check for required fields
    if (!isSetDbEventType()) {
      throw new org.apache.thrift.protocol.TProtocolException("Required field 'dbEventType' is unset! Struct:" + toString());
    }

    if (!isSetMessageContext()) {
      throw new org.apache.thrift.protocol.TProtocolException("Required field 'messageContext' is unset! Struct:" + toString());
    }

    if (!isSetPublisherService()) {
      throw new org.apache.thrift.protocol.TProtocolException("Required field 'publisherService' is unset! Struct:" + toString());
    }

    // check for sub-struct validity
  }

  private void writeObject(java.io.ObjectOutputStream out) throws java.io.IOException {
    try {
      write(new org.apache.thrift.protocol.TCompactProtocol(new org.apache.thrift.transport.TIOStreamTransport(out)));
    } catch (org.apache.thrift.TException te) {
      throw new java.io.IOException(te);
    }
  }

  private void readObject(java.io.ObjectInputStream in) throws java.io.IOException, ClassNotFoundException {
    try {
      read(new org.apache.thrift.protocol.TCompactProtocol(new org.apache.thrift.transport.TIOStreamTransport(in)));
    } catch (org.apache.thrift.TException te) {
      throw new java.io.IOException(te);
    }
  }

  private static class DBEventMessageStandardSchemeFactory implements SchemeFactory {
    public DBEventMessageStandardScheme getScheme() {
      return new DBEventMessageStandardScheme();
    }
  }

  private static class DBEventMessageStandardScheme extends StandardScheme<DBEventMessage> {

    public void read(org.apache.thrift.protocol.TProtocol iprot, DBEventMessage struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TField schemeField;
      iprot.readStructBegin();
      while (true)
      {
        schemeField = iprot.readFieldBegin();
        if (schemeField.type == org.apache.thrift.protocol.TType.STOP) { 
          break;
        }
        switch (schemeField.id) {
          case 1: // DB_EVENT_TYPE
            if (schemeField.type == org.apache.thrift.protocol.TType.I32) {
              struct.dbEventType = org.apache.airavata.model.dbevent.DBEventType.findByValue(iprot.readI32());
              struct.setDbEventTypeIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          case 2: // MESSAGE_CONTEXT
            if (schemeField.type == org.apache.thrift.protocol.TType.STRUCT) {
              struct.messageContext = new DBEventMessageContext();
              struct.messageContext.read(iprot);
              struct.setMessageContextIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          case 3: // PUBLISHER_SERVICE
            if (schemeField.type == org.apache.thrift.protocol.TType.STRING) {
              struct.publisherService = iprot.readString();
              struct.setPublisherServiceIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          default:
            org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
        }
        iprot.readFieldEnd();
      }
      iprot.readStructEnd();
      struct.validate();
    }

    public void write(org.apache.thrift.protocol.TProtocol oprot, DBEventMessage struct) throws org.apache.thrift.TException {
      struct.validate();

      oprot.writeStructBegin(STRUCT_DESC);
      if (struct.dbEventType != null) {
        oprot.writeFieldBegin(DB_EVENT_TYPE_FIELD_DESC);
        oprot.writeI32(struct.dbEventType.getValue());
        oprot.writeFieldEnd();
      }
      if (struct.messageContext != null) {
        oprot.writeFieldBegin(MESSAGE_CONTEXT_FIELD_DESC);
        struct.messageContext.write(oprot);
        oprot.writeFieldEnd();
      }
      if (struct.publisherService != null) {
        oprot.writeFieldBegin(PUBLISHER_SERVICE_FIELD_DESC);
        oprot.writeString(struct.publisherService);
        oprot.writeFieldEnd();
      }
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }

  }

  private static class DBEventMessageTupleSchemeFactory implements SchemeFactory {
    public DBEventMessageTupleScheme getScheme() {
      return new DBEventMessageTupleScheme();
    }
  }

  private static class DBEventMessageTupleScheme extends TupleScheme<DBEventMessage> {

    @Override
    public void write(org.apache.thrift.protocol.TProtocol prot, DBEventMessage struct) throws org.apache.thrift.TException {
      TTupleProtocol oprot = (TTupleProtocol) prot;
      oprot.writeI32(struct.dbEventType.getValue());
      struct.messageContext.write(oprot);
      oprot.writeString(struct.publisherService);
    }

    @Override
    public void read(org.apache.thrift.protocol.TProtocol prot, DBEventMessage struct) throws org.apache.thrift.TException {
      TTupleProtocol iprot = (TTupleProtocol) prot;
      struct.dbEventType = org.apache.airavata.model.dbevent.DBEventType.findByValue(iprot.readI32());
      struct.setDbEventTypeIsSet(true);
      struct.messageContext = new DBEventMessageContext();
      struct.messageContext.read(iprot);
      struct.setMessageContextIsSet(true);
      struct.publisherService = iprot.readString();
      struct.setPublisherServiceIsSet(true);
    }
  }

}
